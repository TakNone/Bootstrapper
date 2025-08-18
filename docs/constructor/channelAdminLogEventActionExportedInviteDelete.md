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
		link : 'vMfSjJnme69Nqwxk',
		admin_id : -3128654351183572166,
		date : 93,
		start_date : 66,
		expire_date : 10,
		usage_limit : 3,
		usage : 67,
		requested : 51,
		subscription_expired : 24,
		title : 'r9ymE4Koj50tnpOR',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 82,
			amount : 5690435271744854939,
		),
	),
);
```