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
		link : 'NqMgt5Gd1WRloS48',
		admin_id : -1123550493262700729,
		date : 12,
		start_date : 51,
		expire_date : 61,
		usage_limit : 54,
		usage : 88,
		requested : 82,
		subscription_expired : 52,
		title : 'bGNjwZVUory6f1hl',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 98,
			amount : -8550441039648163759,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'dapRNnjc6k37xVvm',
		admin_id : -5948688151863962039,
		date : 31,
		start_date : 46,
		expire_date : 34,
		usage_limit : 91,
		usage : 29,
		requested : 29,
		subscription_expired : 55,
		title : '4cElV5vktpZOWHoI',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 12,
			amount : -7742123226694127828,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8522005054536900585,
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
			id : 528068449217518197,
			access_hash : 3868494065073236390,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zAtrlcTRwPES38Du',
					reason : 'mEJ9bzu6IiB7rUhj',
					text : 'QkMHr4saJv9NgEyY',
				),
			),
			bot_inline_placeholder : 'NpXhTjEcruHW2z3K',
			lang_code : 'uA9vX08MclpidBgP',
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
				max_id : 59,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : -2886838382847944651,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : 8511250321593014803,
			),
			bot_active_users : 80,
			bot_verification_icon : 6038071090915338915,
			send_paid_messages_stars : 5927281545079839944,
		),
	),
);
```