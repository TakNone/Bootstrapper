# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 218

```tl
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of elements in the list |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blockedSlice(
	count : 38,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : 8092820308773535986,
			),
			date : 93,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5801271927752727446,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5036979568810863367,
			title : 'aegZScVbIEsxkGXQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 48,
			date : 42,
			version : 31,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 60,
			),
		),
		$client->chatForbidden(
			id : 7909172587802427822,
			title : 'Mq4fAjJu6pHQgaWi',
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
			id : 1437332787541261170,
			access_hash : -764645170786427511,
			title : 'VrXbMw1KQge4vEHj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wM21lTFyk605HiS7',
					reason : 'Ux1g0XjBMF4eOiPV',
					text : 'BX5otqscMQ9kgA37',
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
				until_date : 40,
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
				until_date : 78,
			),
			participants_count : 69,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 63,
			),
			color : $client->peerColor(
				color : 49,
				background_emoji_id : 8848378322311189624,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : -2070692755167496705,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 12,
			subscription_until_date : 42,
			bot_verification_icon : -5415853792533151911,
			send_paid_messages_stars : -2914017407442898450,
			linked_monoforum_id : -3004128596301655958,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8632291200771805923,
			access_hash : 8772548822010233259,
			title : 'PsU3LxQj2F1vkDwg',
			until_date : 90,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7566724858681710252,
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
			id : -4712064447986723676,
			access_hash : 7072443849894610684,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ymLbrfxHRq0K2lCI',
					reason : 'emq5SAh9rMyVg4lX',
					text : 'jear28w6NosnlkTO',
				),
			),
			bot_inline_placeholder : 'gPSb7XDErNL32soM',
			lang_code : 'sDLjTN9lUAmBVSR1',
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
				color : 10,
				background_emoji_id : -7671510928904527037,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : -9068734604369324522,
			),
			bot_active_users : 46,
			bot_verification_icon : -4294870507668258223,
			send_paid_messages_stars : 9002969888531775079,
		),
	),
);
```