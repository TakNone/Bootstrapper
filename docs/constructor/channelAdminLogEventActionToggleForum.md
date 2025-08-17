# channelAdminLogEventActionToggleForum

**Description** : *Forum functionality was enabled or disabled*

**Layer** : 211

```tl
channelAdminLogEventActionToggleForum#2cc6383 new_value:Bool = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_value</mark> | [`Bool`](type/Bool) | Whether forum functionality was enabled or disabled |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionToggleForum(
	new_value : $client->boolFalse(),
);
```