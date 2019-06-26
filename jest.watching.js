/**
 * @description Watching test class
 * Enable hooks on Jest running
 * @author Luca Cattide
 * @date 2019-06-20
 * @class TestWatchPlugin
 */
class TestWatchPlugin {
  // Add hooks to Jest lifecycle events
  apply(jestHooks) {
    // Defines if a test must be executed or not
    jestHooks.shouldRunTestSuite((testPath) => {
      // TODO: Set test name
      return testPath.includes('my-keyword');
    });
    // Promise version
    jestHooks.shouldRunTestSuite((testPath) => {
      // TODO: Set test name
      return Promise.resolve(testPath.includes('my-keyword'));
    });
    // On test complete pass the result
    jestHooks.onTestRunComplete((results) => {
      this._hasSnapshotFailure = results.snapshot.failure;
    });
    // On every Filesystem change
    jestHooks.onFileChange(({
      projects,
    }) => {
      this._projects = projects;
    });
  }

  // Get the prompt information for interactive plugins
  getUsageInfo(globalConfig) {
    // Edit the user menu
    return {
      key: 's',
      prompt: 'do something',
    };
  }

  // Executed when the key from `getUsageInfo` is input
  run(globalConfig, updateConfigAndRun) {
    // Executes the setted actions
    // Pass as parameters the configuration and a test trigger
  }
}
