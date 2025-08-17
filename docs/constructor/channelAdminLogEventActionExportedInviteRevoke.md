# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 211

```tl
channelAdminLogEventActionExportedInviteRevoke#410a134e invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was revoked |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteRevoke(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'ws12QNUl70EAiIub',
		admin_id : -6350920558528613540,
		date : 73,
		start_date : 84,
		expire_date : 7,
		usage_limit : 50,
		usage : 1,
		requested : 55,
		subscription_expired : 20,
		title : 'wgsBxXF39kieCndG',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 94,
			amount : -6804853462394456400,
		),
	),
);
```