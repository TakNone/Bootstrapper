# help.getAppChangelog

**Description** : *Get changelog of current app\.
Typically, an updates constructor will be returned, containing one or more updateServiceNotification updates with app\-specific changelogs*

**Layer** : 214

```tl
help.getAppChangelog#9010ef6f prev_app_version:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_app_version</mark> | [`string`](type/string) | Previous app version |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->help->getAppChangelog(
	prev_app_version : 'N1vopfJILRTqmHtD',
);
```