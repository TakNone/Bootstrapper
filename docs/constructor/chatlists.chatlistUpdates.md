# chatlists.chatlistUpdates

**Description** : *Updated information about a chat folder deep link &raquo;*

**Layer** : 214

```tl
chatlists.chatlistUpdates#93bd878d missing_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistUpdates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to join |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistUpdates](type/chatlists.ChatlistUpdates)

---

## Example

```php
$chatlistsChatlistUpdates = $client->chatlists->chatlistUpdates(
	missing_peers : array(
		$client->peerUser(
			user_id : -5673232100485806053,
		),
		$client->peerChat(
			chat_id : 4360333194073280436,
		),
		$client->peerChannel(
			channel_id : 2258723499241120344,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2564764360504030066,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3596184683774918887,
			title : 'FoW2sczBAtXI14ug',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 9,
			version : 40,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 25,
			),
		),
		$client->chatForbidden(
			id : 9155642564948087317,
			title : 'P57QeASzrXYf2xnR',
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
			id : -6662030303566046854,
			access_hash : -7955641013887731119,
			title : '5uDPSo2zm3cNHlf7',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VXU36WPbjTZqDAEF',
					reason : 'HOJoc6KghD5TmS7t',
					text : 'uBwlOC4sFAdMvti2',
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
				until_date : 26,
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
				until_date : 35,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 58,
			color : $client->peerColor(
				color : 89,
				background_emoji_id : -4496481714657269335,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 5354227051170989825,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 81,
			subscription_until_date : 42,
			bot_verification_icon : -8349299687843504953,
			send_paid_messages_stars : 7707350593345994662,
			linked_monoforum_id : 7055524601897835636,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -515975969973751554,
			access_hash : 3602467341302205127,
			title : 'Bzi8tLPW6DTEXN3j',
			until_date : 6,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3191060216155188018,
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
			id : 2315436021684395879,
			access_hash : -1238969854235850291,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4ExPaG8QMmFokpTe',
					reason : 'qgLXBjG0tIQmRJ8n',
					text : 'icgV2HLYhvlAto4R',
				),
			),
			bot_inline_placeholder : 'oJsgke0fFE7DuK2N',
			lang_code : 'nXl95IAWfUmopeLr',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : -5339822828813264563,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : -2727173770741691671,
			),
			bot_active_users : 42,
			bot_verification_icon : 736982151244887124,
			send_paid_messages_stars : 5334274793810079789,
		),
	),
);
```