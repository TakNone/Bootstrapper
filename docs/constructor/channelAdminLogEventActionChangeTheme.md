# channelAdminLogEventActionChangeTheme

**Description** : *The chat theme was changed*

**Layer** : 216

```tl
channelAdminLogEventActionChangeTheme#fe69018d prev_value:string new_value:string = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`string`](type/string) | Previous theme emoji |
| <mark>new_value</mark> | [`string`](type/string) | New theme emoji |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeTheme(
	prev_value : '4EVaXKJS3iLxnCkp',
	new_value : 'KnLmdDz2N7Aa0f6Q',
);
```