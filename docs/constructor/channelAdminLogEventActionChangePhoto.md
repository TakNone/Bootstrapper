# channelAdminLogEventActionChangePhoto

**Description** : *The channel/supergroup&#039;s picture was changed*

**Layer** : 218

```tl
channelAdminLogEventActionChangePhoto#434bd2af prev_photo:Photo new_photo:Photo = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_photo</mark> | [`Photo`](type/Photo) | Previous picture |
| <mark>new_photo</mark> | [`Photo`](type/Photo) | New picture |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangePhoto(
	prev_photo : $client->photoEmpty(
		id : 5074713289906449183,
	),
	new_photo : $client->photoEmpty(
		id : -4548373656373392479,
	),
);
```