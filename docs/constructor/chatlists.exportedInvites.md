# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links &raquo;*

**Layer** : 216

```tl
chatlists.exportedInvites#10ab6dc7 invites:Vector<ExportedChatlistInvite> chats:Vector<Chat> users:Vector<User> = chatlists.ExportedInvites;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invites</mark> | [`Vector<ExportedChatlistInvite>`](type/ExportedChatlistInvite) | The chat folder deep links » |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ExportedInvites](type/chatlists.ExportedInvites)

---

## Example

```php
$chatlistsExportedInvites = $client->chatlists->exportedInvites(
	invites : array(
		$client->exportedChatlistInvite(
			revoked : true,
			title : 'Zh8y69LQ23CKRNG7',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : 4652996070320404786,
				),
				$client->peerChat(
					chat_id : -1662478134787185874,
				),
				$client->peerChannel(
					channel_id : -1120145815999288811,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -990161793439459596,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2247758999977310402,
			title : 'Aa81HqkRzPXLnN5i',
			photo : $client->chatPhotoEmpty(),
			participants_count : 37,
			date : 26,
			version : 0,
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
				until_date : 70,
			),
		),
		$client->chatForbidden(
			id : 4014284315148020318,
			title : 'NKW7mkMF8iaucxr1',
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
			id : 8995517350402471830,
			access_hash : -7994741615519609558,
			title : 'PYWKzL0kpMAScdZl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'y2LwBDWpiExJGF6P',
					reason : 'kgm9wVhJHKULX0QN',
					text : 'wEp5tZ7ad0V4o9zB',
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
				until_date : 70,
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
				until_date : 55,
			),
			participants_count : 44,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 7125723029490000021,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : 7555167565580701613,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 97,
			subscription_until_date : 25,
			bot_verification_icon : 5071175216457867709,
			send_paid_messages_stars : 2151025103981675617,
			linked_monoforum_id : -8582931804233267730,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -102855868872355356,
			access_hash : -8254384887804898,
			title : 'rBG10KXpQI6sYa3b',
			until_date : 78,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6068719421494242077,
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
			id : -625796992944580149,
			access_hash : 4341735416563135642,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pKRXSk0x9j5ylPTd',
					reason : 'HMOZrTL2lwNsRyi9',
					text : 'BFXZ3ASykRwOaoDf',
				),
			),
			bot_inline_placeholder : 'sTHY6Qo0lVEKzqLI',
			lang_code : 'YhSkJMIRPbpfye19',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 4,
			color : $client->peerColor(
				color : 13,
				background_emoji_id : -8095213528573157633,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -7451657577522230100,
			),
			bot_active_users : 14,
			bot_verification_icon : -1207638581963205403,
			send_paid_messages_stars : 3580535987697476090,
		),
	),
);
```