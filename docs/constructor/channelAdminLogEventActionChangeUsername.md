# channelAdminLogEventActionChangeUsername

**Description** : *Channel/supergroup username was changed*

**Layer** : 218

```tl
channelAdminLogEventActionChangeUsername#6a4afc38 prev_value:string new_value:string = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`string`](type/string) | Old username |
| <mark>new_value</mark> | [`string`](type/string) | New username |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeUsername(
	prev_value : 'i29Pdr8GeufjO7tJ',
	new_value : 'OS3ULR8jQyalDNFH',
);
```