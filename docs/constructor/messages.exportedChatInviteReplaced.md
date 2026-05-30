# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 222

```tl
messages.exportedChatInviteReplaced#222600ef invite:ExportedChatInvite new_invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The replaced chat invite |
| <mark>new_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite that replaces the previous invite |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Example

```php
$messagesExportedChatInvite = $client->messages->exportedChatInviteReplaced(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'AwICiVUFskGX3T1y',
		admin_id : 4820775594967705874,
		date : 35,
		start_date : 44,
		expire_date : 80,
		usage_limit : 34,
		usage : 82,
		requested : 8,
		subscription_expired : 10,
		title : 'da0fTH2mp1JkogZi',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 17,
			amount : 2796943230159511655,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'yv2OUSpn8DP3zGH5',
		admin_id : 5055899930728859678,
		date : 74,
		start_date : 46,
		expire_date : 84,
		usage_limit : 5,
		usage : 26,
		requested : 30,
		subscription_expired : 99,
		title : '0ayFNtzEPrlHfw6S',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 39,
			amount : 5359543604795231731,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5422635328044968047,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			id : -3178005454565861661,
			access_hash : 6820757668198938450,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'r4AKysDoSCUO2EHi',
					reason : 'Wv4ihIFH8Cc1qS5A',
					text : 'eRZ8AghpjMkq0UX4',
				),
			),
			bot_inline_placeholder : 'zRpwIF1LCTiyG9Au',
			lang_code : 'PT5WFxYumkwXe13C',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 39,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : -4574956124316771145,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -1099632131802149419,
			),
			bot_active_users : 3,
			bot_verification_icon : -5928942632117899325,
			send_paid_messages_stars : -6726579530826415612,
		),
	),
);
```