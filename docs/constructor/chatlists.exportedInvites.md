# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links &raquo;*

**Layer** : 222

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
			title : 'Lh5GCvDNIrnu8TyX',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : 2173908784778121712,
				),
				$client->peerChat(
					chat_id : 2566820998221890970,
				),
				$client->peerChannel(
					channel_id : 4721222450110809539,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4744962097185128750,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8900795310096924587,
			title : '3JTjDdRc48YexqvP',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 59,
			version : 93,
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
				until_date : 3,
			),
		),
		$client->chatForbidden(
			id : -4076477581311389444,
			title : 'x4uYhcMWrbU9eR1d',
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
			id : 3551594229521122374,
			access_hash : 6375451203936927485,
			title : '8LUZ9pExDSadNn62',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zc2nMoAi5YKae1mf',
					reason : 'OqpSbfiCGF4k0YKa',
					text : 'cbUPnA8WJuHGmOLf',
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
				until_date : 83,
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
				until_date : 66,
			),
			participants_count : 70,
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
				color : 10,
				background_emoji_id : 2747360573501669597,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -549622891383729405,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 23,
			subscription_until_date : 64,
			bot_verification_icon : -282841764127294198,
			send_paid_messages_stars : 2832592052768664340,
			linked_monoforum_id : -7860215537897758324,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 4614210885785114263,
			access_hash : -8621061861680627568,
			title : '2kUsaPnGQ9YzchBN',
			until_date : 87,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6510126369223785141,
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
			id : 7811245130210811330,
			access_hash : -5690185139134133273,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HzlIU79cnRjo6syh',
					reason : '6LMA8ZnbqFl1X5tW',
					text : 'jnAcNxmIBfkdU2rD',
				),
			),
			bot_inline_placeholder : 'UfdDcXOjpHwrIgZx',
			lang_code : 'VLtE4poMianhIeJA',
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
				max_id : 57,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 2705701575765059827,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 9217658911440467310,
			),
			bot_active_users : 62,
			bot_verification_icon : -2377395691399567791,
			send_paid_messages_stars : -3546384534540048777,
		),
	),
);
```