# channelAdminLogEventActionToggleAutotranslation

**Layer** : 211

```tl
channelAdminLogEventActionToggleAutotranslation#c517f77e new_value:Bool = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_value</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleAutotranslation(
	new_value : $client->boolFalse(),
);
```