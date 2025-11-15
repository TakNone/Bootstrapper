# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 216

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
		link : 'GOvpo8HyfUXVweZQ',
		admin_id : -4596454215061371400,
		date : 8,
		start_date : 48,
		expire_date : 93,
		usage_limit : 48,
		usage : 48,
		requested : 69,
		subscription_expired : 31,
		title : 'HsS0dpyQnN7qv4oO',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 100,
			amount : 4688107260127377494,
		),
	),
);
```