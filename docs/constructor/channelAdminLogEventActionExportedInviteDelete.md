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
		link : 'G1HUzQPWmJutkB6L',
		admin_id : -6201543690146586684,
		date : 84,
		start_date : 38,
		expire_date : 85,
		usage_limit : 13,
		usage : 99,
		requested : 30,
		subscription_expired : 57,
		title : '9Zwa7pyub5L0TDio',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 12,
			amount : -7244505401429959916,
		),
	),
);
```