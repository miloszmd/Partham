///<reference path="DeployRepository.ts"/>

class DeployService {
    private _deployRepository: DeployRepository;

    constructor() {
        this._deployRepository = new DeployRepository();
    }

    getUsage(callback: any) {
        return this._deployRepository.getUsage(callback);
    }

    getDeploys(callback: any) {
        return this._deployRepository.getDeploys(callback);
    }

    getBuilds(callback: any) {
        return this._deployRepository.getBuilds(callback);
    }
}