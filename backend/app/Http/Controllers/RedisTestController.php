<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisTestController extends Controller
{
    /**
     * Generate Redis key
     * Format: type:id (e.g., user:1)
     */
    private function generateKey($type, $id)
    {
        return strtolower($type) . ':' . $id;
    }

    /**
     * Store static data in Redis (HASH TYPE)
     */
    public function setData($type, $id)
    {
        $key = $this->generateKey($type, $id);

        $data = [
            'id' => (string) $id,
            'type' => $type,
            'name' => ucfirst($type) . ' Demo ' . $id,
            'status' => 'active',
            'updated_at' => now()->toDateTimeString(),
        ];

        // Store as HASH
        Redis::hmset($key, $data);

        return response()->json([
            'success' => true,
            'message' => 'Data stored successfully (HASH)',
            'key' => $key,
            'data' => $data,
        ]);
    }

    /**
     * Store dynamic data using query params
     * Example: ?name=Ali&status=inactive
     */
    public function setDynamicData(Request $request, $type, $id)
    {
        $key = $this->generateKey($type, $id);

        $data = [
            'id' => (string) $id,
            'type' => $type,
            'name' => $request->query('name', ucfirst($type) . ' Demo ' . $id),
            'status' => $request->query('status', 'active'),
            'updated_at' => now()->toDateTimeString(),
        ];

        Redis::hmset($key, $data);

        return response()->json([
            'success' => true,
            'message' => 'Dynamic data stored successfully (HASH)',
            'key' => $key,
            'data' => $data,
        ]);
    }

    /**
     * Fetch data from Redis
     */
    public function getData($type, $id)
    {
        $key = $this->generateKey($type, $id);

        $data = Redis::hgetall($key);

        if (empty($data)) {
            return response()->json([
                'success' => false,
                'message' => 'No data found',
                'key' => $key,
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully',
            'key' => $key,
            'data' => $data,
        ]);
    }

    /**
     * Get Redis key type (string, hash, etc.)
     */
    public function getKeyType($type, $id)
    {
        $key = $this->generateKey($type, $id);

        return response()->json([
            'key' => $key,
            'type' => Redis::type($key),
        ]);
    }
}