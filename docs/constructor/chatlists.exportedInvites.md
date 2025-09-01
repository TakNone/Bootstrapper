# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links &raquo;*

**Layer** : 214

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
			title : 'rYVbyi6k43lG2CUx',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : -5130605919155738108,
				),
				$client->peerChat(
					chat_id : 2865105318377944916,
				),
				$client->peerChannel(
					channel_id : 674952301130307373,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2331078964431416444,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1503335286008599488,
			title : 'HnbdGs470xqy3kXj',
			photo : $client->chatPhotoEmpty(),
			participants_count : 48,
			date : 7,
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
				until_date : 81,
			),
		),
		$client->chatForbidden(
			id : -5566573547505311474,
			title : 'D9pyZsPwv0T1defO',
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
			id : 6995458743743611944,
			access_hash : 6540694335593070484,
			title : 'ifsHYw3bcO6InuBT',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Qc2LZb7Sel01KIV5',
					reason : '45BLkWNRsOhfw8jp',
					text : 'tsBeubDnMmwql4Po',
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
				until_date : 100,
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
			participants_count : 58,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 67,
			color : $client->peerColor(
				color : 80,
				background_emoji_id : -2372498519976931168,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : 1618779798246020011,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 12,
			subscription_until_date : 14,
			bot_verification_icon : -1898932328720292547,
			send_paid_messages_stars : -5076100903981252324,
			linked_monoforum_id : 913530714985024846,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5884463022321077075,
			access_hash : 6759186674741460972,
			title : 's6t4ndCSlNuXa37w',
			until_date : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7078372197631155931,
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
			id : 1026977113795696663,
			access_hash : -1917791076821278232,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ILl3YXfyJBrugaHo',
					reason : 'NxecquUSvAOZW8LR',
					text : '08oCx4Hr62L5S9uT',
				),
			),
			bot_inline_placeholder : 'PGfAvSzNiMchnLbX',
			lang_code : 'br8fRqp5vzG2SJQn',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 29,
			color : $client->peerColor(
				color : 13,
				background_emoji_id : 3036504638052938099,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -3482357118499833198,
			),
			bot_active_users : 56,
			bot_verification_icon : -43345635709844809,
			send_paid_messages_stars : -2184415213657087189,
		),
	),
);
```