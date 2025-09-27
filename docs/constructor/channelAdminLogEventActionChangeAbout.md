# channelAdminLogEventActionChangeAbout

**Description** : *The description was changed*

**Layer** : 214

```tl
channelAdminLogEventActionChangeAbout#55188a2e prev_value:string new_value:string = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`string`](type/string) | Previous description |
| <mark>new_value</mark> | [`string`](type/string) | New description |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeAbout(
	prev_value : 'QP6UKkcsVtfpRFwa',
	new_value : 'aFglhOfxc128J6jG',
);
```