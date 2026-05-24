<!--
  - SPDX-FileCopyrightText: 2026 Nextcloud GmbH
  - SPDX-FileCopyrightText: 2024-2026 Marcel Scherello
  - SPDX-License-Identifier: AGPL-3.0-or-later
-->
# Share Review
This app can be used for auditing shares within a Nextcloud instance e.g. for data loss prevention.
Share status can be exported for documentation.

- Review any file share 
  - files, talk, deck, teams, federation
  - app specific shares (if implemented by other apps)
- Remove shares
- Confirm current review
  - show only new shares next time
- Audit compliance
- Assign review to user groups (e.g. audit or risk mgmt)
- Export as CSV or PDF (manual or regular background job)

### Note:
The app must be restricted to at least one specific user group in the app store. 
This prevents accidental exposure of the shared content to all users.

<p align="center">
<img src="https://github.com/nextcloud-gmbh/grc_sharereview/blob/main/screenshots/logo.png?raw=true" alt="Main" width="600" title="Share Review">
</p>
<p align="center">
<img src="https://github.com/nextcloud-gmbh/grc_sharereview/blob/main/screenshots/screenshot.png?raw=true" alt="Main" width="600" title="Share Review">
</p>
<p align="center">
<img src="https://github.com/nextcloud-gmbh/grc_sharereview/blob/main/screenshots/report.png?raw=true" alt="Main" width="600" title="Share Review">
</p>
