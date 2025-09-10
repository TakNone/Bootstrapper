# channelAdminLogEventActionToggleSlowMode

**Description** : *Slow mode setting for supergroups was changed*

**Layer** : 214

```tl
channelAdminLogEventActionToggleSlowMode#53909779 prev_value:int new_value:int = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`int`](type/int) | Previous slow mode value |
| <mark>new_value</mark> | [`int`](type/int) | New slow mode value |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleSlowMode(
	prev_value : 32,
	new_value : 50,
);
```