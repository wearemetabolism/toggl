<?php namespace Ixudra\Toggl\Traits;


use stdClass;

trait WorkspaceTrait
{
    /**
     * Get workspace projects
     *
     * @return stdClass
     */
    public function workspaces()
    {
        return $this->sendGetMessage('https://www.toggl.com/api/v8/workspaces');

    }

    /**
     * Get workspace projects
     *
     * @return stdClass
     */
    public function workspaceProjects($data=null)
    {
        return $this->sendGetMessage('https://www.toggl.com/api/v8/workspaces/' . $this->workspaceId . '/projects',$data);
        
    }

    /**
     * Get workspace client
     *
     * @return stdClass
     */
    public function workspaceClients()
    {
        return $this->sendGetMessage('https://www.toggl.com/api/v8/workspaces/' . $this->workspaceId . '/clients');

    }

}
