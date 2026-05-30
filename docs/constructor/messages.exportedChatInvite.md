# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 222

```tl
messages.exportedChatInvite#1871be50 invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Info about the chat invite |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Example

```php
$messagesExportedChatInvite = $client->messages->exportedChatInvite(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'ULCcsrpanBTDJz3I',
		admin_id : -6789051065392061332,
		date : 28,
		start_date : 38,
		expire_date : 34,
		usage_limit : 100,
		usage : 25,
		requested : 67,
		subscription_expired : 3,
		title : 'yX1vbK6umgkDNGwe',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 98,
			amount : -9141402250848835092,
		),
	),
	users : array(
		$client->userEmpty(
			id : 498119734730500404,
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
			id : 6726411584096260113,
			access_hash : -7204183170043430096,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tNrRmu7ByCObaI54',
					reason : 'LO6QCl0HWT3kRIGi',
					text : '1j9J6IGKbwBo0aVY',
				),
			),
			bot_inline_placeholder : 'JPlZmRivg5utens6',
			lang_code : 'dCmLhToHNkvz97eI',
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
				max_id : 23,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : 4977115386387810299,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : -2721838558134544583,
			),
			bot_active_users : 21,
			bot_verification_icon : 2333887288128228763,
			send_paid_messages_stars : 1183290987556191241,
		),
	),
);
```