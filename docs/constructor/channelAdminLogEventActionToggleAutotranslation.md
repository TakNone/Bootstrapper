# channelAdminLogEventActionToggleAutotranslation

**Description** : *Channel autotranslation was toggled &raquo;*

**Layer** : 216

```tl
channelAdminLogEventActionToggleAutotranslation#c517f77e new_value:Bool = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_value</mark> | [`Bool`](type/Bool) | New value of the toggle |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleAutotranslation(
	new_value : false,
);
```