# help.recentMeUrls

**Description** : *Recent t\.me URLs*

**Layer** : 222

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
			user_id : 1854652901323454346,
		),
		$client->recentMeUrlChat(
			url : 'https://docs.liveproto.dev',
			chat_id : -918091246766794966,
		),
		$client->recentMeUrlChatInvite(
			url : 'https://docs.liveproto.dev',
			chat_invite : $client->chatInviteAlready(
				chat : $client->chatEmpty(
					id : -5927773974861888279,
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
					installed_date : 4,
					id : -5314199199429185162,
					access_hash : 217388865067262456,
					title : 'RJC5zQfdahj2oTYn',
					short_name : 'QPRLxsZD4n1hciWe',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 59,
					thumb_version : 72,
					thumb_document_id : -2972837687946013801,
					count : 27,
					hash : 0,
				),
				cover : $client->documentEmpty(
					id : 7140362451009444587,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7171242702036053725,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2780361721383158145,
			title : '34wgoVANOFWCiGnT',
			photo : $client->chatPhotoEmpty(),
			participants_count : 35,
			date : 87,
			version : 72,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : -4632981403816428812,
			title : 'kQz9CAZPW65gLv3x',
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
			id : 6832438774033563148,
			access_hash : 5936702471169954266,
			title : 'Dl59BcRmprtok1WQ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Q9yBItNHE4VsuOg1',
					reason : 'BMuzkA1scj95m0xl',
					text : 'mjVvbuhxOR1Hlr5W',
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
				until_date : 84,
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
				until_date : 95,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 39,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 3667644821079423612,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 1022658484729832119,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 70,
			subscription_until_date : 92,
			bot_verification_icon : 4386835966544888562,
			send_paid_messages_stars : 8178320986417872449,
			linked_monoforum_id : 1886226002912644213,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 3839609577410246564,
			access_hash : 2026941143220431729,
			title : 'dqoZ64TQRKySPO8D',
			until_date : 75,
		),
	),
	users : array(
		$client->userEmpty(
			id : -645352772819822740,
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
			id : 8742458775997346813,
			access_hash : 6969216804145603771,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pEdy84rfTxhOiv5b',
					reason : 'Oj0zHnFWftU7XJKB',
					text : 'GwashY7XJq4Olm9d',
				),
			),
			bot_inline_placeholder : 'dPqOtwfkzEuWeXnI',
			lang_code : 'Nj0teIKmPvdfDSq1',
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
				max_id : 13,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -2501862292178524392,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : 5961358569998288826,
			),
			bot_active_users : 52,
			bot_verification_icon : -6542485622143436313,
			send_paid_messages_stars : 276765320296186869,
		),
	),
);
```