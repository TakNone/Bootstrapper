# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 216

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
		link : 'nW2SPZpdTq6gmCHb',
		admin_id : 4179244338948466899,
		date : 37,
		start_date : 30,
		expire_date : 44,
		usage_limit : 84,
		usage : 99,
		requested : 27,
		subscription_expired : 17,
		title : 'kTwl3Mvg6hBa0DGS',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 85,
			amount : 1425611710585683884,
		),
	),
);
```