# contacts.resolvedPeer

**Description** : *Resolved peer*

**Layer** : 218

```tl
contacts.resolvedPeer#7f077ad9 peer:Peer chats:Vector<Chat> users:Vector<User> = contacts.ResolvedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[contacts.ResolvedPeer](type/contacts.ResolvedPeer)

---

## Example

```php
$contactsResolvedPeer = $client->contacts->resolvedPeer(
	peer : $client->peerUser(
		user_id : -6655687853384222121,
	),
	chats : array(
		$client->chatEmpty(
			id : -6707686595176152891,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5284277298203207177,
			title : 'jIPYm7LkExBHXFKo',
			photo : $client->chatPhotoEmpty(),
			participants_count : 94,
			date : 10,
			version : 70,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 46,
			),
		),
		$client->chatForbidden(
			id : -4517030394688451689,
			title : 'S6nJXM9yDPmirTEs',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -82988196632343184,
			access_hash : -965202864867746872,
			title : 'atN1HA7kEx4eY2Wd',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mEtsDJrGhO7BV6fg',
					reason : 'Hrm7ZfY0oE6akSx2',
					text : 'nxHBXk8hqrJbMVA1',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 63,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 13,
			),
			participants_count : 15,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 52,
			),
			color : $client->peerColor(
				color : 2,
				background_emoji_id : -1644309807255842212,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : 8242765960299273909,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 69,
			subscription_until_date : 88,
			bot_verification_icon : -7982955263444224671,
			send_paid_messages_stars : -2086623399937837260,
			linked_monoforum_id : -8968442683103536482,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5178797849207650687,
			access_hash : 8865149593347556813,
			title : 'KsDVnEh1pm8StHyY',
			until_date : 34,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5690716375111607720,
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
			id : -4154858010141361631,
			access_hash : 4804840689237514418,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zxhouKHrRnvQ8TkD',
					reason : 'JxiZhI8V7yreSFcX',
					text : 'Ls8FMGp0c9Riw4jI',
				),
			),
			bot_inline_placeholder : 'ACI4EvRyOiZKGcVr',
			lang_code : 'WQ62OAiYkaEFCJsI',
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
				max_id : 11,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 9199848722911631210,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : 5895208645989398799,
			),
			bot_active_users : 55,
			bot_verification_icon : 3940846915325806152,
			send_paid_messages_stars : -7326924941893528483,
		),
	),
);
```