# channelAdminLogEventActionToggleGroupCallSetting

**Description** : *Group call settings were changed*

**Layer** : 211

```tl
channelAdminLogEventActionToggleGroupCallSetting#56d6a247 join_muted:Bool = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>join_muted</mark> | [`Bool`](type/Bool) | Whether all users are muted by default upon joining |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleGroupCallSetting(
	join_muted : $client->boolFalse(),
);
```