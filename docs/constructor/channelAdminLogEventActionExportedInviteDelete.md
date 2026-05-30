# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 222

```tl
channelAdminLogEventActionExportedInviteDelete#5a50fca4 invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The deleted chat invite |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteDelete(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '7wqUXBCSGx4Kgrs3',
		admin_id : -366717828455252817,
		date : 6,
		start_date : 64,
		expire_date : 27,
		usage_limit : 21,
		usage : 34,
		requested : 69,
		subscription_expired : 78,
		title : '2tqMRv7gey4dKzPx',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 94,
			amount : 2310315671518137429,
		),
	),
);
```