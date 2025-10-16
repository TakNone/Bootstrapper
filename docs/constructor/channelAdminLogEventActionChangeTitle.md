# channelAdminLogEventActionChangeTitle

**Description** : *Channel/supergroup title was changed*

**Layer** : 216

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
	prev_value : 'fvZguLDCyOAh16IB',
	new_value : 't5KH4ePNYjL3ywSG',
);
```