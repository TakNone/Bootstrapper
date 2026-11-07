# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 233

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
		link : 'f1RP2bJVmiX6u5Bw',
		admin_id : 5857010643423385781,
		date : 61,
		start_date : 96,
		expire_date : 90,
		usage_limit : 78,
		usage : 60,
		requested : 91,
		subscription_expired : 95,
		title : 'tFNxXH3vT2ACo6m5',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 49,
			amount : 2532698685931409521,
		),
	),
);
```