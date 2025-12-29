# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 218

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
		link : 'bVJGrPitRlqLYKuB',
		admin_id : 9126105417423329933,
		date : 42,
		start_date : 46,
		expire_date : 20,
		usage_limit : 74,
		usage : 56,
		requested : 28,
		subscription_expired : 30,
		title : 'AXrRnsx147qfoyIN',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 39,
			amount : 696701171054391938,
		),
	),
);
```