<?php

namespace iMemento\Clients;

class Ratings extends AbstractClient
{
    protected $mode = 'critical';

    protected $authorization = 'none';

    // region CRUD
    public function listRatings(array $query = [])
    {
        return $this->list('ratings', $query);
    }

    public function createRating(array $attributes = [])
    {
        return $this->post('ratings', $attributes);
    }

    public function showRating(int $id)
    {
        return $this->get("ratings/$id");
    }

    public function updateRating(int $id, array $attributes = [])
    {
        return $this->put("ratings/$id", $attributes);
    }

    public function destroyRating(int $id)
    {
        return $this->delete("ratings/$id");
    }
    // endregion

    // region Operational
    public function getResourceRatingAverage(array $query = [])
    {
        return $this->get('ratings/average', $query);
    }
    // endregion
}
