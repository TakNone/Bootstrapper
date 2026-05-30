# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

**Layer** : 222

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter_id</mark> | [`int`](type/int) | ID of the imported folder |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to be imported |
| <mark>already_peers</mark> | [`Vector<Peer>`](type/Peer) | Peers that were already imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInviteAlready(
	filter_id : 94,
	missing_peers : array(
		$client->peerUser(
			user_id : -5485162009314832302,
		),
		$client->peerChat(
			chat_id : -5505839071526110691,
		),
		$client->peerChannel(
			channel_id : 7996081154345386206,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : 5797874742725625468,
		),
		$client->peerChat(
			chat_id : -4184018381832905211,
		),
		$client->peerChannel(
			channel_id : 4336138234507904496,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3561078693329306280,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6066715104896724851,
			title : 'xdSWzy2Fj7biBXlq',
			photo : $client->chatPhotoEmpty(),
			participants_count : 19,
			date : 40,
			version : 7,
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
				until_date : 13,
			),
		),
		$client->chatForbidden(
			id : -8465000670818972322,
			title : 'JTRdNua35qkO8wnl',
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
			id : 2305864254082984911,
			access_hash : 6244740487318458935,
			title : '6oxdYUGvqC0fXPns',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VUGYKMsxcj1BRb7h',
					reason : 'T38rjY2dEk5MwNm6',
					text : '01Tt5EVre9QspNJo',
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
				until_date : 31,
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
				until_date : 31,
			),
			participants_count : 28,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 51,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 4561681743722639796,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : -4712769377797140047,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 93,
			subscription_until_date : 85,
			bot_verification_icon : 6246597832344211456,
			send_paid_messages_stars : -9062043424792432825,
			linked_monoforum_id : -3956121808345687929,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 4459363720077960701,
			access_hash : 1080866728131011864,
			title : 'yfukAiQHTqdcUx5R',
			until_date : 8,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2392657668295032047,
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
			id : 5239877545185402251,
			access_hash : -7415825138007591543,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'j6ShAI47bYN39OR2',
					reason : 'lSGWUMBKmkDV9p58',
					text : 'BEhFb1r4O6XlKukN',
				),
			),
			bot_inline_placeholder : 'ecQ3PwyzmRSGKUbl',
			lang_code : 'jTA4ZyGVLBkrH9EW',
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
				max_id : 32,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 6360841264357167045,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : 3545696577312309284,
			),
			bot_active_users : 41,
			bot_verification_icon : -1458920783449140129,
			send_paid_messages_stars : -3041044745031085122,
		),
	),
);
```