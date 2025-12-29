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
			title : 'xcDQ3o6fi41dmHAW',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : 9061863902057842504,
				),
				$client->peerChat(
					chat_id : -1353016402090947511,
				),
				$client->peerChannel(
					channel_id : -8081174792728891125,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6482003386321154738,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2282884023319887461,
			title : 'LP3iWtKkE6OUx5Sv',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 91,
			version : 61,
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
				until_date : 67,
			),
		),
		$client->chatForbidden(
			id : -2522577311771457370,
			title : 'v7asPnNHJSlIm0Uc',
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
			id : 5034206621086556575,
			access_hash : -5119874126568878793,
			title : 'WKGNFncBhqi1HP2w',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CTbtfmWOiZ1oH9uB',
					reason : 'tX0CsDZ8nxkVof7O',
					text : 'vcuol3zUBR6TrWaY',
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
				until_date : 69,
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
				until_date : 45,
			),
			participants_count : 93,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 73,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 3259489969222757604,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : -2113536319603309690,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 24,
			subscription_until_date : 96,
			bot_verification_icon : -8272014259175443902,
			send_paid_messages_stars : 2983676436090862169,
			linked_monoforum_id : 6786090283618385109,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6763683731099869528,
			access_hash : 2590730245157522275,
			title : 'WMQjvhFHLBg2kV1x',
			until_date : 61,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6446982311556284639,
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
			id : 9034500349623791194,
			access_hash : -9086645496368705729,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tgARpY9uw1flZHhF',
					reason : 'rQK5t9MOVZc4aBIe',
					text : 'H4Xy6qmvKPUI7faz',
				),
			),
			bot_inline_placeholder : 'Tky25fFHiLNKWo3Q',
			lang_code : 'VMmCWLpTjG7hIuO4',
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
				max_id : 44,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -561844582133181178,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 7447227708179130051,
			),
			bot_active_users : 17,
			bot_verification_icon : 8158401026975117202,
			send_paid_messages_stars : 6503586991763695854,
		),
	),
);
```