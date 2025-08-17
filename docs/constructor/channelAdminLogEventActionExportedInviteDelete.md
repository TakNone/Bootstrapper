# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 211

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
		link : 'U1R35yYvcVBChwe0',
		admin_id : -1303132628907313274,
		date : 51,
		start_date : 75,
		expire_date : 58,
		usage_limit : 76,
		usage : 78,
		requested : 78,
		subscription_expired : 14,
		title : 'vUt3feFDnR1Qz0ly',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 68,
			amount : -7817907147488542564,
		),
	),
);
```