# channelAdminLogEventActionToggleSignatures

**Description** : *Channel signatures were enabled/disabled*

**Layer** : 211

```tl
channelAdminLogEventActionToggleSignatures#26ae0971 new_value:Bool = ChannelAdminLogEventAction;
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
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleSignatures(
	new_value : $client->boolFalse(),
);
```