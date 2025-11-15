# help.recentMeUrls

**Description** : *Recent t\.me URLs*

**Layer** : 218

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
			user_id : -865595421310420121,
		),
		$client->recentMeUrlChat(
			url : 'https://docs.liveproto.dev',
			chat_id : -6689579029687302554,
		),
		$client->recentMeUrlChatInvite(
			url : 'https://docs.liveproto.dev',
			chat_invite : $client->chatInviteAlready(
				chat : $client->chatEmpty(
					id : 3415545038177222969,
				),
			),
		),
		$client->recentMeUrlStickerSet(
			url : 'https://docs.liveproto.dev',
			set : $client->stickerSetCovered(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 54,
					id : 7281461249740702833,
					access_hash : 6897868199361932276,
					title : 'tc5fEJ4QeIpO2vMH',
					short_name : 'kvraYtlSBe8nojEC',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 5,
					thumb_version : 2,
					thumb_document_id : -2055289565485599326,
					count : 89,
					hash : 0,
				),
				cover : $client->documentEmpty(
					id : -6293110054856795652,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8003995436325020112,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6288586504028747908,
			title : '1yDE5UYXmkuA8s7Z',
			photo : $client->chatPhotoEmpty(),
			participants_count : 100,
			date : 43,
			version : 78,
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
				until_date : 77,
			),
		),
		$client->chatForbidden(
			id : 3892602550023313629,
			title : 'o7Mfa6bVHE8ZkmNs',
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
			id : 4960904136540881553,
			access_hash : 7404668404226358830,
			title : 'wbUmRgfhvMG74uVa',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3O2vdzxq6yTsQHZX',
					reason : 'zeMU51SoQNfPsd8A',
					text : '1GHpA973zeIdgPXl',
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
				until_date : 51,
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
				until_date : 64,
			),
			participants_count : 71,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 89,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 6957308280217410124,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : -7981754771846334477,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 1,
			subscription_until_date : 10,
			bot_verification_icon : -6208941962936416394,
			send_paid_messages_stars : -528010168161667698,
			linked_monoforum_id : -4317043457059582033,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2413131056052301006,
			access_hash : 1226005457070094040,
			title : 'PKdkazC9Q5AYULwx',
			until_date : 42,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6993236310256089065,
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
			id : -4349975622972426405,
			access_hash : -111123908171273862,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6k7ljCtZ9p8WRabX',
					reason : 'g4scFKbvZ3Dm2Y78',
					text : 'alK6stnjmP5SNXdE',
				),
			),
			bot_inline_placeholder : 'wxlkXG5K9tz3Pjcm',
			lang_code : 'ts5bvZ8Do79CMSau',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : -825536845372948570,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 2495810964973623281,
			),
			bot_active_users : 48,
			bot_verification_icon : 818217001251920225,
			send_paid_messages_stars : -5768325325370458623,
		),
	),
);
```