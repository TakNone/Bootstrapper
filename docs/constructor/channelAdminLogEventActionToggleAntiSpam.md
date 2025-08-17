# channelAdminLogEventActionToggleAntiSpam

**Description** : *Native antispam functionality was enabled or disabled*

**Layer** : 211

```tl
channelAdminLogEventActionToggleAntiSpam#64f36dfc new_value:Bool = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_value</mark> | [`Bool`](type/Bool) | Whether antispam functionality was enabled or disabled |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleAntiSpam(
	new_value : $client->boolFalse(),
);
```