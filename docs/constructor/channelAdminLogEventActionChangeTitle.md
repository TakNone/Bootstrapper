# channelAdminLogEventActionChangeTitle

**Description** : *Channel/supergroup title was changed*

**Layer** : 227

```tl
channelAdminLogEventActionChangeTitle#e6dfb825 prev_value:string new_value:string = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`string`](type/string) | Previous title |
| <mark>new_value</mark> | [`string`](type/string) | New title |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeTitle(
	prev_value : 'pZyTuPmn3A4HSRGe',
	new_value : 'QgjnPZzBLKFl6GpN',
);
```