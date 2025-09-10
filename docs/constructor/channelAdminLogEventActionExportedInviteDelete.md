# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 214

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
		link : 'rS1TEgsQqCymKP6G',
		admin_id : 9152238178342670659,
		date : 66,
		start_date : 24,
		expire_date : 28,
		usage_limit : 41,
		usage : 72,
		requested : 29,
		subscription_expired : 44,
		title : 'sfK6GunibXFRdZ54',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 3,
			amount : 1963187144296332512,
		),
	),
);
```