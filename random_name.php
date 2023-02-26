<?php

/**
 * @param string $param
 * For $param use: name or last_name
 */

function randomName(string $param)
{
    $name = array("Абрам", "Абросим", "Аввакум", "Август", "Авдей", "Авдий", "Авель", "Авенир", "Аверий", "Аверкий", "Аверьян", "Авксентий", "Авраам", "Авраамий", "Аврам", "Аврамий", "Аврелиан", "Автоном", "Агап", "Агапий", "Агапит", "Агафангел", "Агафон", "Аггей", "Адам", "Адриан", "Азар", "Азарий", "Акакий", "Акила", "Аким", "Акиндин", "Акинф", "Акинфий", "Аксён", "Аксентий", "Александр", "Алексей", "Алексий", "Альберт", "Альфред", "Амвросий", "Амос", "Амфилохий", "Ананий", "Анастасий", "Анатолий", "Андрей", "Андриан", "Андрон", "Андроний", "Андроник", "Анект", "Анемподист", "Аникей", "Аникий", "Аникита", "Анисий", "Анисим", "Антиох", "Антип", "Антипа", "Антипий", "Антон", "Антонин", "Антроп", "Антропий", "Ануфрий", "Аполлинарий", "Аполлон", "Аполлос", "Ардалион", "Ареф", "Арефий", "Арий", "Аристарх", "Аристид", "Аркадий", "Арнольд", "Арон", "Арсен", "Арсений", "Арсентий", "Артамон", "Артём", "Артемий", "Артур", "Архип", "Асаф", "Асафий", "Аскольд", "Афанасий", "Афиноген", "Афинодор", "Африкан", "Бажен", "Бенедикт", "Богдан", "Болеслав", "Бонифат", "Бонифатий", "Борис", "Борислав", "Бронислав", "Будимир", "Вавила", "Вадим", "Валентин", "Валериан", "Валерий", "Варлам", "Варламий", "Варнава", "Варсоноф", "Варсонофий", "Варфоломей", "Василий", "Вассиан", "Велизар", "Велимир", "Венедикт", "Вениамин", "Венцеслав", "Викентий", "Виктор", "Викторий", "Викул", "Викула", "Вилен", "Виленин", "Вильгельм", "Виссарион", "Вит", "Виталий", "Витовт", "Витольд", "Владилен", "Владимир", "Владислав", "Владлен", "Влас", "Власий", "Вонифат", "Вонифатий", "Всеволод", "Всеслав", "Вукол", "Вышеслав", "Вячеслав", "Гавриил", "Гаврил", "Галактион", "Гедеон", "Гелимин", "Геласий", "Гелий", "Геннадий", "Генрих", "Георгий", "Герасим", "Гервасий", "Герман", "Гермоген", "Геронтий", "Гиацинт", "Глеб", "Гораций", "Горгоний", "Гордей", "Гостомысл", "Гремислав", "Григорий", "Гурий", "Гурьян", "Давид", "Давыд", "Далмат", "Даниил", "Данил", "Деодор", "Дементий", "Демид", "Демьян", "Денис", "Денисий", "Димитрий", "Диомид", "Дионисий", "Дмитрий", "Добромысл", "Добрыня", "Довмонт", "Доминик", "Донат", "Доримедонт", "Дормедонт", "Дормидонт", "Дорофей", "Досифей", "Евгений", "Евграф", "Евграфий", "Евдоким", "Евлампий", "Евлогий", "Евмен", "Евмений", "Евсей", "Евстафий", "Евстахий", "Евстигней", "Евстрат", "Евстратий", "Евтихий", "Евфимий", "Егор", "Егорий", "Елизар", "Елисей", "Елистрат", "Елпидифор", "Емельян", "Епифан", "Епифаний", "Еремей", "Ермий", "Ермил", "Ермила", "Ермилий", "Ермолай", "Ерофей", "Ефим", "Ефимий", "Ефрем", "Ефремий", "Захар", "Захарий", "Зенон", "Зиновий", "Зосим", "Зосима", "Иаким", "Иакинф", "Иван", "Игнат", "Игнатий", "Игорь", "Иероним", "Измаил", "Изосим", "Изот", "Изяслав", "Илиодор", "Илларион", "Илья", "Иннокентий", "Иоанн", "Иов", "Иона", "Иосафат", "Иосиф", "Ипат", "Ипатий", "Ипполит", "Ираклий", "Иринарх", "Ириней", "Иродион", "Исаак", "Исаакий", "Исай", "Исак", "Исакий", "Исидор", "Иустин", "Казимир", "Каллимах", "Каллиник", "Каллиопий", "Каллист", "Каллистрат", "Каллисфен", "Калуф", "Кандидий", "Кантидиан", "Капик", "Капитон", "Карион", "Карл", "Карп", "Кастрихий", "Касьян", "Ким", "Киприан", "Кир", "Кириак", "Кирик", "Кирилл", "Кирсан", "Клавдий", "Клим", "Климент", "Климентий", "Кондрат", "Кондратий", "Конон", "Конрад", "Константин", "Корней", "Корнелий", "Корнил", "Корнилий", "Ксенофонт", "Кузьма", "Куприян", "Лавр", "Лаврентий", "Ладимир", "Лазарь", "Ларион", "Лев", "Леон", "Леонард", "Леонид", "Леонтий", "Леопольд", "Логвин", "Логгин", "Лонгин", "Луарсаб", "Лука", "Лукан", "Лукиан", "Лукьян", "Любим", "Любомир", "Любомысл", "Люциан", "Мавр", "Маврикий", "Мавродий", "Май", "Макар", "Макарий", "Македон", "Македоний", "Максим", "Максимиан", "Максимилиан", "Малх", "Мануил", "Марат", "Мардарий", "Мариан", "Марин", "Марк", "Маркел", "Маркиан", "Марлен", "Мартимьян", "Мартин", "Мартиниан", "Мартирий", "Мартын", "Мартьян", "Матвей", "Мелентий", "Мелетий", "Меркул", "Меркурий", "Мефодий", "Мечислав", "Милан", "Милен", "Милий", "Мина", "Минай", "Мирон", "Мирослав", "Мисаил", "Митрофан", "Митрофаний", "Михаил", "Михей", "Модест", "Моисей", "Мокей", "Мокий", "Мстислав", "Назар", "Назарий", "Наркис", "Натан", "Наум", "Нестер", "Нестор", "Нефёд", "Никандр", "Никанор", "Никита", "Никифор", "Никодим", "Николай", "Никон", "Нил", "Нифонт", "Олег", "Олимпий", "Онисим", "Онисифор", "Онуфрий", "Орест", "Осип", "Оскар", "Остап", "Остромир", "Павел", "Павлин", "Паисий", "Палладий", "Памфил", "Памфилий", "Панкрат", "Панкратий", "Пантелей", "Пантелеймон", "Панфил", "Парамон", "Пармен", "Парфён", "Парфений", "Парфентий", "Патрикей", "Патрикий", "Пафнутий", "Пахом", "Пахомий", "Перфилий", "Пётр", "Пимен", "Питирим", "Платон", "Полиевкт", "Полиект", "Поликарп", "Поликарпий", "Порфир", "Порфирий", "Потап", "Потапий", "Пров", "Прокл", "Прокоп", "Прокопий", "Прокофий", "Протас", "Протасий", "Прохор", "Радий", "Радим", "Радислав", "Радован", "Ратибор", "Ратмир", "Рафаил", "Рем", "Роберт", "Родион", "Роман", "Ростислав", "Рубен", "Рувим", "Рудольф", "Руслан", "Рюрик", "Савва", "Савватей", "Савватий", "Савёл", "Савелий", "Саверий", "Савин", "Савиниан", "Сакердон", "Салтам", "Самойла", "Самсон", "Самсоний", "Самуил", "Светозар", "Свирид", "Святополк", "Святослав", "Себастьян", "Севастьян", "Северин", "Северьян", "Селиван", "Селивёрст", "Селифан", "Семён", "Семион", "Серапион", "Серафим", "Сергей", "Сигизмунд", "Сидор", "Сила", "Силан", "Силантий", "Силуян", "Сильван", "Сильвестр", "Симеон", "Симон", "Смарагд", "Созон", "Созонт", "Созонтий", "Сократ", "Соломон", "Сосипатр", "Софон", "Софоний", "Софрон", "Софроний", "Спартак", "Спиридон", "Спиридоний", "Станимир", "Станислав", "Стахий", "Степан", "Стоян", "Стратоник", "Сысой", "Тарас", "Твердислав", "Творимир", "Терентий", "Тертий", "Тигран", "Тигрий", "Тимофей", "Тимур", "Тит", "Тихон", "Тристан", "Трифилий", "Трифон", "Трофим", "Увар", "Ульян", "Устин", "Фабиан", "Фадей", "Фалалей", "Фатьян", "Фёдор", "Федос", "Федосей", "Федосий", "Федот", "Федотий", "Федул", "Феликс", "Фемистокл", "Феогност", "Феоктист", "Феопемпт", "Феофан", "Феофил", "Феофилакт", "Ферапонт", "Филарет", "Филат", "Филимон", "Филипий", "Филипп", "Филофей", "Фирс", "Флегонт", "Флорентий", "Флорентин", "Флориан", "Фока", "Фома", "Фортунат", "Фотий", "Фридрих", "Фрол", "Харитон", "Харитоний", "Харлам", "Харламп", "Харлампий", "Хрисанф", "Христофор", "Эдуард", "Эмилий", "Эмиль", "Эммануил", "Эразм", "Эраст", "Эрнест", "Эрнст", "Ювеналий", "Юлиан", "Юлий", "Юрий", "Юстин", "Яким", "Яков", "Якуб", "Ян", "Януарий", "Ярополк", "Ярослав", "ЕНСКИЕ", "Августа", "Августина", "Авдотья", "Аврелия", "Аврея", "Аврора", "Агапа", "Агапия", "Агарь", "Агата", "Агафа", "Агафоклия", "Агафоника", "Агафья", "Аглаида", "Аглая", "Агнесса", "Агния", "Аграфена", "Агриппина", "Ада", "Аделаида", "Аделина", "Аделла", "Адель", "Адельфина", "Адина", "Адолия", "Адриана", "Аза", "Азалия", "Азелла", "Аида", "Акилина", "Аксинья", "Акулина", "Алевтина", "Александра", "Александрина", "Алексина", "Алёна", "Алина", "Алиса", "Алла", "Алфея", "Альберта", "Альбертина", "Альбина", "Альвина", "Альфия", "Амалия", "Амата", "Амелфа", "Анастасия", "Анатолия", "Ангела", "Ангелика", "Ангелина", "Анджела", "Андрея", "Андрона", "Андроника", "Анжела", "Анжелика", "Анисья", "Анна", "Антигона", "Антонида", "Антониана", "Антонина", "Антония", "Анфима", "Анфиса", "Анфия", "Анфуса", "Аполлинария", "Аполлония", "Апраксия", "Апрелия", "Апфия", "Аргентея", "Ариадна", "Арина", "Ария", "Арминия", "Арсения", "Артемида", "Артемия", "Аста", "Астра", "Афанасия", "Аэлита", "Беата", "Беатриса", "Белла", "Бенедикта", "Берта", "Бландина", "Богдана", "Божена", "Болеслава", "Борислава", "Бояна", "Бронислава", "Валентина", "Валенсия", "Валерия", "Ванда", "Варвара", "Васёна", "Василида", "Василина", "Василиса", "Василия", "Василла", "Васса", "Вацлава", "Вевея", "Велимира", "Велислава", "Венедикта", "Венера", "Венуста", "Венцеслава", "Вера", "Вереника", "Вероника", "Верония", "Веселина", "Веста", "Вестита", "Вива", "Вивея", "Вивиана", "Видана", "Викентия", "Викторина", "Виктория", "Вила", "Вилена", "Виленина", "Вильгельмина", "Виола", "Виолетта", "Виргиния", "Виринея", "Вита", "Виталика", "Виталина", "Виталия", "Влада", "Владилена", "Владимира", "Владислава", "Владлена", "Власта", "Воислава", "Воля", "Всеслава", "Гаафа", "Гала", "Галата", "Галатея", "Гали", "Галина", "Галла", "Галя", "Гая", "Геласия", "Гемелла", "Гемина", "Гения", "Геннадия", "Геновефа", "Генриетта", "Георгина", "Гера", "Германа", "Гертруда", "Гея", "Глафира", "Гликерия", "Глориоза", "Голиндуха", "Гонеста", "Гонората", "Горгония", "Горислава", "Гортензия", "Градислава", "Грета", "Далила", "Даная", "Дарья", "Дебора", "Деина", "Декабрина", "Денисия", "Диана", "Дигна", "Дина", "Диодора", "Дионина", "Дия", "Доброгнева", "Добромила", "Добромира", "Доброслава", "Доминика", "Домитилла", "Домна", "Домника", "Домникия", "Домнина", "Донара", "Доната", "Дора", "Дорофея", "Доса", "Досифея", "Дросида", "Дуклида", "Ева", "Евангелина", "Еванфия", "Евгения", "Евдокия", "Евдоксия", "Евлалия", "Евлампия", "Евмения", "Евминия", "Евника", "Евникия", "Евномия", "Евпраксия", "Евсевия", "Евстафия", "Евстолия", "Евтихия", "Евтропия", "Евфалия", "Евфимия", "Евфросиния", "Екатерина", "Елена", "Елизавета", "Еликонида", "Епистима", "Епистимия", "Ермиония", "Ефимия", "Ефросиния", "Жанна", "Жозефина", "Зара", "Зарема", "Зарина", "Заря", "Заряна", "Звезда", "Земфира", "Зенона", "Зина", "Зинаида", "Зиновия", "Злата", "Зоя", "Ива", "Иванна", "Ида", "Идея", "Иветта", "Ивонна", "Изабелла", "Изида", "Изольда", "Илария", "Илия", "Илона", "Ильина", "Инга", "Инесса", "Инна", "Иоанна", "Иовилла", "Иола", "Иоланта", "Ипполита", "Ираида", "Ирина", "Ирма", "Исидора", "Ифигения", "Ия", "Каздоя", "Казимира", "Калерия", "Калида", "Калиса", "Каллиникия", "Каллиста", "Кама", "Камилла", "Кандида", "Капитолина", "Карина", "Каролина", "Касиния", "Келестина", "Керкира", "Кетевань", "Киликия", "Кима", "Кира", "Кириакия", "Кириана", "Кирилла", "Клавдия", "Клара", "Клариса", "Клементина", "Клеопатра", "Конкордия", "Констанция", "Корнелия", "Кристина", "Ксанфиппа", "Ксения", "Купава", "Лавиния", "Лавра", "Лада", "Лариса", "Лаура", "Леда", "Лейла", "Лемира", "Ленина", "Леокадия", "Леонида", "Леонила", "Леонина", "Леония", "Лея", "Лиана", "Ливия", "Лидия", "Лилиана", "Лилия", "Лина", "Лира", "Лия", "Лолия", "Лонгина", "Лора", "Лота", "Луиза", "Лукерья", "Лукиана", "Лукия", "Лукреция", "Любава", "Любовь", "Любомила", "Любомира", "Людмила", "Люцина", "Люция", "Мавра", "Магда", "Магдалина", "Магна", "Маина", "Майя", "Макрина", "Максима", "Малания", "Малина", "Мальвина", "Мамелфа", "Манефа", "Маргарита", "Мариам", "Мариамна", "Мариана", "Марианна", "Мариетта", "Марина", "Марионилла", "Мария", "Марка", "Маркеллина", "Маркиана", "Марксина", "Марлена", "Марта", "Мартина", "Мартиниана", "Марфа", "Марья", "Марьяна", "Мастридия", "Матильда", "Матрёна", "Матрона", "Мая", "Медея", "Мелания", "Мелитина", "Меркурия", "Мерона", "Милана", "Милена", "Милица", "Милия", "Милослава", "Милютина", "Мина", "Минна", "Минодора", "Мира", "Миропия", "Мирослава", "Мирра", "Митродора", "Михайлина", "Млада", "Модеста", "Моика", "Моника", "Мстислава", "Муза", "Нада", "Надежда", "Нана", "Наркисса", "Настасия", "Наталия", "Нелли", "Ненила", "Неонила", "Нида", "Ника", "Нимфа", "Нимфодора", "Нина", "Нинель", "Новелла", "Нонна", "Ноэми", "Ноябрина", "Нунехия", "Оксана", "Октавия", "Октябрина", "Олдама", "Олеся", "Оливия", "Олимпиада", "Олимпиодора", "Олимпия", "Ольга", "Ольда", "Офелия", "Павла", "Павлина", "Паисия", "Паллада", "Палладия", "Пальмира", "Параскева", "Патрикия", "Пелагея", "Перегрина", "Перпетуя", "Петра", "Петрина", "Петронилла", "Петрония", "Пиама", "Пинна", "Плакида", "Плакилла", "Платонида", "Поликсена", "Поликсения", "Полина", "Поплия", "Правдина", "Прасковья", "Пропедигна", "Прискилла", "Просдоха", "Пульхерия", "Рада", "Радана", "Радислава", "Радмила", "Радомила", "Радомира", "Радосвета", "Радослава", "Радость", "Раиса", "Рафаила", "Рахиль", "Ревекка", "Ревмира", "Регина", "Рема", "Рената", "Римма", "Рипсимия", "Роберта", "Рогнеда", "Роза", "Розалина", "Розалинда", "Розалия", "Розина", "Роксана", "Романа", "Ростислава", "Русана", "Руслана", "Руфина", "Руфиниана", "Руфь", "Сабина", "Савватия", "Савелла", "Савина", "Саломея", "Сальвия", "Самона", "Сарра", "Сатира", "Светислава", "Светлана", "Светозара", "Святослава", "Севастьяна", "Северина", "Секлетея", "Секлетинья", "Селена", "Селестина", "Селина", "Серафима", "Сибилла", "Сильва", "Сильвана", "Сильвестра", "Сильвия", "Симона", "Синклитикия", "Сира", "Слава", "Снадулия", "Снежана", "Сола", "Соломонида", "Соломония", "Сосипатра", "Софрония", "Софья", "Станислава", "Стелла", "Степанида", "Стефанида", "Стефания", "Сусанна", "Сюзанна", "Тавифа", "Таисия", "Тамара", "Тарасия", "Татьяна", "Текуса", "Тереза", "Тигрия", "Тихомира", "Тихослава", "Тома", "Томила", "Транквиллина", "Трифена", "Трофима", "Улита", "Ульяна", "Урбана", "Урсула", "Устина", "Устиния", "Фабиана", "Фавста", "Фавстина", "Фаина", "Фантина", "Феврония", "Федоза", "Федора", "Федосия", "Федотия", "Федула", "Фёкла", "Фекуса", "Феликса", "Фелица", "Фелицата", "Фелиция", "Феогния", "Феодора", "Феодосия", "Феодота", "Феодотия", "Феодула", "Феодулия", "Феозва", "Феоктиста", "Феона", "Феонилла", "Феония", "Феопистия", "Феосевия", "Феофания", "Феофила", "Фервуфа", "Фессалоника", "Фессалоникия", "Фетиния", "Фея", "Фива", "Фивея", "Филарета", "Филиппа", "Филиппия", "Филомена", "Филонилла", "Филофея", "Фиста", "Флавия", "Флёна", "Флора", "Флорентина", "Флоренция", "Флориана", "Флорида", "Фомаида", "Фортуната", "Фотина", "Фотиния", "Франциска", "Фрида", "Фридерика", "Хаврония", "Хариесса", "Хариса", "Харита", "Харитина", "Хиония", "Хриса", "Хрисия", "Христиана", "Христина", "Цвета", "Цветана", "Целестина", "Цецилия", "Шарлотта", "Шушаника", "Эвелина", "Эгина", "Эдит", "Эдита", "Элеонора", "Элисса", "Элла", "Эллада", "Эллина", "Элоиза", "Эльвира", "Эльза", "Эльмира", "Эмилиана", "Эмилия", "Эмма", "Эннафа", "Эра", "Эрна", "Эрнеста", "Эрнестина", "Эсмеральда", "Эсфирь", "Юдифь", "Юлиана", "Юлиания", "Юлия", "Юния", "Юнона", "Юрия", "Юстина", "Ядвига", "Яна", "Янина", "Ярослава");

    switch ($param) {
        case 'name':
            return $name[rand(0, 400)];
            break;
        case 'last_name':
            return $name[1325];
            break;

        default:
            echo ("Неправильный параметр для генерации имен");
            break;
    }
}
