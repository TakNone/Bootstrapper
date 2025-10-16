# help.recentMeUrls

**Description** : *Recent t\.me URLs*

**Layer** : 216

```tl
help.recentMeUrls#e0310d7 urls:Vector<RecentMeUrl> chats:Vector<Chat> users:Vector<User> = help.RecentMeUrls;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>urls</mark> | [`Vector<RecentMeUrl>`](type/RecentMeUrl) | URLs |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[help.RecentMeUrls](type/help.RecentMeUrls)

---

## Example

```php
$helpRecentMeUrls = $client->help->recentMeUrls(
	urls : array(
		$client->recentMeUrlUnknown(
			url : 'https://docs.liveproto.dev',
		),
		$client->recentMeUrlUser(
			url : 'https://docs.liveproto.dev',
			user_id : -1934551642636229328,
		),
		$client->recentMeUrlChat(
			url : 'https://docs.liveproto.dev',
			chat_id : -2176338301968842136,
		),
		$client->recentMeUrlChatInvite(
			url : 'https://docs.liveproto.dev',
			chat_invite : $client->chatInviteAlready(
				chat : $client->chatEmpty(...),
			),
		),
		$client->recentMeUrlStickerSet(
			url : 'https://docs.liveproto.dev',
			set : $client->stickerSetCovered(
				set : $client->stickerSet(...),
				cover : $client->documentEmpty(...),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1685077307378971236,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6156376624987660268,
			title : 'zUVnlJPYjXN0aMA9',
			photo : $client->chatPhotoEmpty(),
			participants_count : 18,
			date : 64,
			version : 78,
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
				until_date : 76,
			),
		),
		$client->chatForbidden(
			id : -5635528138801546108,
			title : '3wzu9vctlG7kjPZW',
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
			id : -2845417500538101554,
			access_hash : 417024225786448852,
			title : 'Tm932C45DSqEK7gh',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ehFvPOxa7TpWB042',
					reason : '4JCqX2sru93Y0hi5',
					text : 'h0SHXBwCcmOML8NQ',
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
				until_date : 57,
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
				until_date : 11,
			),
			participants_count : 46,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 70,
			color : $client->peerColor(
				color : 77,
				background_emoji_id : -909211136621715398,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -741675879215291411,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 45,
			subscription_until_date : 43,
			bot_verification_icon : -99863693267735957,
			send_paid_messages_stars : -442026672303425149,
			linked_monoforum_id : 4528357415168392415,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6021116346749705682,
			access_hash : -7869020662004661068,
			title : 'xARnEivgsclVMuNf',
			until_date : 56,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3233391378645079324,
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
			id : -7476311652006011166,
			access_hash : -639459403352832211,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3L4HVnfNYC7E1paB',
					reason : 'LPHq5iNgFf0ZduhQ',
					text : '2zsYrM7GDIe9KoSq',
				),
			),
			bot_inline_placeholder : '1hveENBns8cDHRoG',
			lang_code : 'SbjxWBvOCJk6DtmM',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 56,
			color : $client->peerColor(
				color : 26,
				background_emoji_id : 5436983795037963126,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -3022672661558489488,
			),
			bot_active_users : 47,
			bot_verification_icon : -8113337072788297881,
			send_paid_messages_stars : -2914534732533373289,
		),
	),
);
```