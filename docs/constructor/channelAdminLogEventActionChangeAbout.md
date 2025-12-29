# channelAdminLogEventActionChangeAbout

**Description** : *The description was changed*

**Layer** : 218

```tl
channelAdminLogEventActionChangeAbout#55188a2e prev_value:string new_value:string = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`string`](type/string) | Previous description |
| <mark>new_value</mark> | [`string`](type/string) | New description |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeAbout(
	prev_value : 'A73G9qS0Yvo6ema5',
	new_value : 'z9xmBquN2D3oSVJd',
);
```