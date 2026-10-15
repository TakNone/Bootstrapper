# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 229

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
		link : 'OJV5fcF8zoGXkU03',
		admin_id : 6376984876356108090,
		date : 27,
		start_date : 55,
		expire_date : 5,
		usage_limit : 76,
		usage : 66,
		requested : 60,
		subscription_expired : 93,
		title : 'MyQ9qVRWOXb43nhs',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 1,
			amount : 6887129039533619058,
		),
	),
);
```