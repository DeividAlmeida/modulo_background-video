SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

INSERT INTO `modulos` (`nome`, `url`, `icone`, `status`, `ordem`, `tabela`, `cod_head`, `data_atualizacao`, `chave`, `acao`)
SELECT 'Background Video', 'background-video.php', 'icon-car', 1, 0, '', 'background-video/background-video.js', '2020-07-12', '72b4b1d7ce2b514a981a49b1db5790a7','{\r\n \"background\":[\"adicionar\",\"editar\",\"deletar\"]\r\n}';

-- CATEGORIA
CREATE TABLE IF NOT EXISTS `background-video` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tipo` varchar(255) DEFAULT NULL,
  `largura` text DEFAULT NULL,
  `altura` text DEFAULT NULL,
  `path` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;