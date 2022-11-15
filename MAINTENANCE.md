# Zenstruck Package Maintenance

## Merging

### Merging Rules

* Bugs/minor/doc changes: any maintainer can merge without approval
* Features: at least one other maintainer should approve
* All commits to the primary branch(es) should be done via PRs

### Merging Process

* Aside from merge commits, any commits made on the primary branch(es) should use the [Conventional Commit specification](https://www.conventionalcommits.org/en/v1.0.0/) with the following supported prefixes:
  * `feature:` new features
  * `fix:` bug fixes
  * `minor:` code typos, etc
  * `chore:` ci/sca/cs
  * `docs:` documentation updates/fixes
* Use "Squash and merge" if the PR does one thing
  * When using this, there is the option to edit the commit message, ensure one of the above prefixes is added
* Use "Create a merge commit" if there are multiple commits that make sense to be added to the changelog as separate items
  * Ensure all PR commit messages have the above prefixes (you may have to rebase the PR and adjust the commit messages)

## Releases

### Versioning Strategy

[Semantic Versioning](https://semver.org/) (`MAJOR.MINOR.PATCH`) should be used with the following adjustments/clarifications based on the [Merging Process](#merging-process) prefixes:

* If any of the commits ready to be released are _features_, create as _MINOR_ release
* If all pending commits are only fix/minor/doc/chore, create as _PATCH_ release
* _TODO - MAJOR releases_

### Release Process

Use [zenstruck/changelog](https://github.com/zenstruck/changelog) to create the releases and auto-update the changelog... _WIP_
