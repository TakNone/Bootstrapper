# channelAdminLogEventActionToggleSignatureProfiles

**Description** : *Channel signature profiles were enabled/disabled*

**Layer** : 211

```tl
channelAdminLogEventActionToggleSignatureProfiles#60a79c79 new_value:Bool = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_value</mark> | [`Bool`](type/Bool) | New value |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleSignatureProfiles(
	new_value : $client->boolFalse(),
);
```