# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 227

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
		link : '8cC0j1pDIgvon4fP',
		admin_id : 937571482042713754,
		date : 12,
		start_date : 26,
		expire_date : 1,
		usage_limit : 32,
		usage : 12,
		requested : 72,
		subscription_expired : 40,
		title : 'bVZd7CJyQrln1DfG',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 5,
			amount : 5411114422950856427,
		),
	),
);
```