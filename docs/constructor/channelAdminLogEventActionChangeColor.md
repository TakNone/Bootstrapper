# channelAdminLogEventActionChangeColor

**Description** : *The background profile color &raquo; of a channel was changed*

**Layer** : 214

```tl
channelAdminLogEventActionChangeColor#3c2b247b prev_value:int new_value:int = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`int`](type/int) | The old color palette ID |
| <mark>new_value</mark> | [`int`](type/int) | The old color palette ID |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeColor(
	prev_value : 72,
	new_value : 30,
);
```