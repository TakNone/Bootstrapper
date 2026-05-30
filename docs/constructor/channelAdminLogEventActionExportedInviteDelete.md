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
		link : 'GxW6Ztbj9L82Nklh',
		admin_id : -3313431108791721668,
		date : 44,
		start_date : 35,
		expire_date : 16,
		usage_limit : 74,
		usage : 33,
		requested : 20,
		subscription_expired : 40,
		title : '3jEGWfXCw2qPIhZu',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 92,
			amount : 6358354003649873006,
		),
	),
);
```