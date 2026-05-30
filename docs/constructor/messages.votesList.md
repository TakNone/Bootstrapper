# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 222

```tl
messages.votesList#4899484e flags:# count:int votes:Vector<MessagePeerVote> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.VotesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of votes for all options (or only for the chosen option, if provided to messages.getPollVotes) |
| <mark>votes</mark> | [`Vector<MessagePeerVote>`](type/MessagePeerVote) | Vote info for each user |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users that voted in the poll |
| **next_offset** | [`flags.0?string`](type/string) | Offset to use with the next messages.getPollVotes request, empty string if no more results are available |

---

## Type

[messages.VotesList](type/messages.VotesList)

---

## Example

```php
$messagesVotesList = $client->messages->votesList(
	count : 15,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : 4776564960066902248,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 53,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : -9155031172170719556,
			),
			date : 54,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : 4266737705572262198,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 75,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6925530937092194079,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8253867648866243298,
			title : 'xb0218pWeAzFRDiu',
			photo : $client->chatPhotoEmpty(),
			participants_count : 79,
			date : 64,
			version : 28,
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
				until_date : 80,
			),
		),
		$client->chatForbidden(
			id : 5815476124938745209,
			title : 'AWbCl3qtjdxOsaIR',
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
			id : -9099054311830008652,
			access_hash : -1540813786155215286,
			title : 'Kr6tu2ySvcm7xDRI',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PG3uy6NfTVzD81lO',
					reason : 'XQCWJIvpReUtq5bP',
					text : 'l2DugJoKbnvHsFkq',
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
				until_date : 32,
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
				until_date : 37,
			),
			participants_count : 73,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 53,
			),
			color : $client->peerColor(
				color : 59,
				background_emoji_id : 6381098790405222446,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : 7114995424446559357,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 68,
			bot_verification_icon : 4701152469968246466,
			send_paid_messages_stars : -3902408449691736690,
			linked_monoforum_id : -250906960155499550,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5694181212373432908,
			access_hash : -5494435585840644896,
			title : 'RTCJ2Yis0VS1xFd9',
			until_date : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6454879907498796186,
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
			id : -6363067364590478382,
			access_hash : -4070018958326753811,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VTELQboJhF1z9XPr',
					reason : 'dpgvtRQGluZPAqTi',
					text : 'uIJi8kqFXaOBxwhv',
				),
			),
			bot_inline_placeholder : 'rqiRTbOgyfsVzJdC',
			lang_code : 'bvpFLRJz4XuBCqZ2',
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
				max_id : 10,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 6825784895151336218,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 7668317596535165227,
			),
			bot_active_users : 41,
			bot_verification_icon : 539897895705667347,
			send_paid_messages_stars : -7740181672978767719,
		),
	),
	next_offset : 'lhH3uRybSqF69GaE',
);
```