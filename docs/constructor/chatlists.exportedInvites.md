# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links &raquo;*

**Layer** : 218

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
			title : 'RlVNpG16m0Sn3uOw',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : -7790211161340536650,
				),
				$client->peerChat(
					chat_id : 9066219842000927363,
				),
				$client->peerChannel(
					channel_id : -609598659377550048,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7407196573580486279,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2419448296966216809,
			title : 'lnxuYsavWRhcVeKZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 74,
			date : 65,
			version : 77,
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : 8689309235977162924,
			title : 'RBU0fOjiD2eNrGdT',
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
			id : 8258737314866980515,
			access_hash : 3689203351818639679,
			title : 'bgEZ0N7OzjTpyC9u',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2PqhyIMe8FUpjgs5',
					reason : 'GCSFqOtw6plyBD8L',
					text : '2cbVOoFNXxPh9aty',
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
				until_date : 46,
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
				until_date : 72,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 1,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 2485354915092874708,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : -3118776504547648044,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 75,
			subscription_until_date : 41,
			bot_verification_icon : -5757090214998778392,
			send_paid_messages_stars : 405586106865422835,
			linked_monoforum_id : -937227511537574626,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6044128520816551786,
			access_hash : -3734878907143081677,
			title : 'tFCNvZg8adWlRwDb',
			until_date : 3,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3517286092101371305,
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
			id : 5698108755481906201,
			access_hash : 8233939307468367689,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BgSIHLQlrRWx7d4j',
					reason : '2ke7gxov8QwphFym',
					text : 'M04imQ2Ec3H8N6tu',
				),
			),
			bot_inline_placeholder : 'OroAIhXCRjcKmUdb',
			lang_code : '3qFZeU2lwJdfT5iz',
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
				max_id : 18,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 1451337726283763308,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : -8621644164461427422,
			),
			bot_active_users : 79,
			bot_verification_icon : 641685992955270546,
			send_paid_messages_stars : -2471385123137316899,
		),
	),
);
```